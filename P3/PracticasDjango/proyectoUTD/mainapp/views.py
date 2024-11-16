from django.shortcuts import render, HttpResponse


# Create your views here.
def index(requets):
    return render(requets,'mainapp/index.html',{
        'title':'Inicio Pagina principal',
        'content':'.:: Bienvenido a mi pagina principa ::.'
    })
    
def about(requets):
    mensaje='Bienvenido, mi nombre es: Javier'
    return render(requets, 'mainapp/about.html',{
        'title':'Acerca de nosostros',
        'content':'Somos un grupo de desarrolladores de sw Multiplataforma',
        'mensaje':'mensaje',
    })
    
    

    
def mision(request):
    return render(request,'mainapp/mision.html',{
        'title':'vision',
        'content':'.:: vienvenido a la vision de la empresa ::.'
    })
    

def vision(request):
    return render(request,'mainapp/mision.html',{
        'title':'vision',
        'content':'.:: vienvenido a la vision de la empresa ::.'
    })