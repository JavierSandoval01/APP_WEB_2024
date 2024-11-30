from django.shortcuts import render,redirect 


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
    
    
def redirigir_inicio(request,exception):
    return render(request,'mainapp/404.html')
    




def register_user(request):
    return render(request,'users/registro1.html',{
        'title':'registro',
        'content':'.:: registrarse ::.'
    })
    

def login_user(request):
    return render(request,'users/login1.html',{
        'title':'login',
        'content':'.:: inicio de sesion ::.'
    })