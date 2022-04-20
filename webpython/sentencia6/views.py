from contextlib import redirect_stderr
from django.shortcuts import render, redirect
from django.db import connection

#db
def dictfetchall(cursor):
    columns =[col[0] for col in cursor.description]
    return [dict(zip(columns,row)) for row in cursor.fetchall()]


# Create your views here.
def main(request):
    if request.method == 'POST':
        data = request.POST['login']
        print(data)
        return redirect('main')
    with connection.cursor() as cursor:
        query = 'SELECT * FROM acceso;'
        cursor.execute(query)
        lista= dictfetchall(cursor)
    context = {'lista1': lista}
    return render(request,'index.html',context)

def home(request):
    return render(request,'main.html',{})
    