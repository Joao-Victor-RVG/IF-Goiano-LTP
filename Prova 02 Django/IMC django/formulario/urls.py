from django.urls import path
from . import views

urlpatterns = [
    path('ip/', views.ip, name="ip"),
    path('imc/', views.imc, name="imc")

]