from django.shortcuts import render,redirect
from django.contrib.auth import authenticate, login, logout
from django.contrib.auth.forms import User
from django.contrib import messages
from django.contrib.auth.decorators import login_required
# from django.contrib.auth.forms import UserCreationForm
from mainapp.forms import RegisterForm


# Create your views here.
def index(request):
    return render(request,'mainapp/index.html',{
        'title':'Inicio Pagina principal',
        'content':'.:: Bienvenido a mi pagina principa ::.',
    })
    
@login_required(login_url='inicio')
def about(request):
    mensaje='Bienvenido, mi nombre es: Javier'
    return render(request, 'mainapp/about.html',{
        'title':'Acerca de nosostros',
        'content':'Somos un grupo de desarrolladores de sw Multiplataforma',
        'mensaje':'mensaje',
    })
    
    

@login_required(login_url='inicio')  
def mision(request):
    return render(request,'mainapp/mision.html',{
        'title':'vision',
        'content':'.:: vienvenido a la mision de la empresa ::.'
    })
    

@login_required(login_url='inicio')
def vision(request):
    return render(request,'mainapp/vision.html',{
        'title':'vision',
        'content':'.:: vienvenido a la vision de la empresa ::.'
    })
    
def register_user(request):

  if request.user.is_authenticated:
    return redirect('inicio')
  else:
     register_form=RegisterForm()

     if request.method == "POST":
       register_form=RegisterForm(request.POST)

       if register_form.is_valid():
          register_form.save()
          messages.success(request,"¡Registro con Éxito")
          return redirect('inicio')
          
     return render(request,'users/registro.html',{
     'title':'Registro de Usuario',
     'register_form':register_form
     })


def login_user(request):
    if request.user.is_authenticated:
        return redirect('inicio')
    else:
        if request.method == "POST":
            username = request.POST.get('username')  # Corrected: added quotes around 'username'
            password = request.POST.get('password')  # Corrected: added quotes around 'password'
            
            user = authenticate(request, username=username, password=password)
            if user is not None:
                login(request, user)
                messages.success(request, "Bienvenido al inicio de sesión")
                return redirect('inicio')
            else:
                messages.warning(request, "No es posible iniciar sesión, por favor ingrese sus credenciales de acceso")
        return render(request, 'users/login.html', {
            'title': 'Iniciar sesión',
        })

        
        
def logout_user(request):
    logout(request)
    return redirect('iniciar_sesion')

def redirigir_inicio(request,exception):
    return render(request,'mainapp/404.html')