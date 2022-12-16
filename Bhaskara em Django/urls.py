from django.urls import path
from . import views

urlpatterns = [ 
    path('bhaskara/', views.bhaskara, name="resultado"),
    path('ip/', views.ip, name='ip')

    
]