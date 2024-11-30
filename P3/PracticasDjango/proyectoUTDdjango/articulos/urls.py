from django.urls import path
from . import views
urlpatterns = [
    path('listado_articulos/', views.list_art,name='listado_articulos'),
    path('categorias/', views.list_cat,name='listado_categorias'),
    
    
   
] 