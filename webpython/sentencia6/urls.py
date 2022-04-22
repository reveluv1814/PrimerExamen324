from django.urls import path
from sentencia6 import views

urlpatterns = [
    path('', views.main, name='main'),
    path('pantallaprincipal', views.pantalla, name='pantalla'),
    path('noexiste', views.noexiste, name='noexiste'),
    path('media', views.notas, name='media'),
    path('salir', views.logout, name='salir'),
    path('informatica', views.info, name='info'),
    path('matematica', views.mate, name='mate'),
    path('estadistica', views.esta, name='esta')
]
