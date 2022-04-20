from django.urls import path
from sentencia6 import views

urlpatterns = [
    path('', views.main, name='index'),
    path('main', views.home, name='main'),
]
