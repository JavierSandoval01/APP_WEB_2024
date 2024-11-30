from django.shortcuts import render
from django.contrib.auth.decorators import login_required
from articulos.models import Article,Category


# Create your views here.
@login_required(login_url='inicio')
def list_art(request):

    #sacar articulos de la bd
    
    articulos = Article.objects.all()
    
    return render(request, 'articulos/listado_art.html', {
        'title': 'articulos',
        'content': 'Listado de articulos',
        'articulos':articulos
    })

@login_required(login_url='inicio')


def list_cat(request):

    #sacar categorias de la bd
    
    categorias = Category.objects.all()
    return render(request, 'categorias/listado_cat.html', {
        'title': 'Categorias',
        'content': 'Listado de categorias',
        'categorias':categorias
    })
