from contextlib import redirect_stderr
from django.shortcuts import render, redirect
from django.db import connection

#db
def dictfetchall(cursor):
    columns =[col[0] for col in cursor.description]
    return [dict(zip(columns,row)) for row in cursor.fetchall()]


# Create your views here.
def main(request):
    user = ''
    passuser = ''
    context= {}
    if request.method == 'POST':
        user = request.POST['user']
        passuser = request.POST['pass']
        request.session['user'] = user
        request.session['passuser'] = passuser
        cursor = connection.cursor()        
        query = f"""SELECT p.nombre_c
                FROM acceso a INNER JOIN persona p ON a.id_acceso = p.id_acceso
                INNER JOIN tiene t ON p.id_persona = t.id_persona
                INNER JOIN rol r ON t.id_rol = r.id_rol
                WHERE r.nombre = 'director' and a.usuario = '{user}'"""
        cursor.execute(query)
        if cursor.fetchone():
            return redirect('pantalla')
        else: 
            return redirect('noexiste')
    return render(request,'index.html',context)

def pantalla(request):
    context= {}
    return render(request,'pantallaAC.html',context)

def noexiste(request):
    context= {}
    return render(request,'noexiste.html',context)
def notas(request):
    context= {}
    lista =[]
    with connection.cursor() as cursor:
        query ="""SELECT AVG(case when departamento='01' then notafinal ELSE 0 end) CH,
                                                                AVG(case when departamento='02' then notafinal ELSE 0 end) LP,
                                                                AVG(case when departamento='03' then notafinal ELSE 0 end) CB,
                                                                AVG(case when departamento='04' then notafinal ELSE 0 end) RU,
                                                                AVG(case when departamento='05' then notafinal ELSE 0 end) PT,
                                                                AVG(case when departamento='06' then notafinal ELSE 0 end) TJ,
                                                                AVG(case when departamento='07' then notafinal ELSE 0 end) SC,
                                                                AVG(case when departamento='08' then notafinal ELSE 0 end) BE,
                                                                AVG(case when departamento='09' then notafinal ELSE 0 end) PD
                                                        FROM inscripcion i INNER JOIN inscrita ins ON i.id_inscripcion = ins.id_inscripcion 
                                                        INNER JOIN persona p ON ins.id_persona = p.id_persona"""
        cursor.execute(query)
        lista = dictfetchall(cursor)
        context = {'lista':lista}
        print(context)
    return render(request,'notas.html',context)


def logout(request):
    request.session.flush()
    context= {}
    return redirect('main')

def info(request):
    context= {}
    return render(request,'info.html',context)
def mate(request):
    context= {}
    return render(request,'mate.html',context)
def esta(request):
    context= {}
    return render(request,'estadistica.html',context)