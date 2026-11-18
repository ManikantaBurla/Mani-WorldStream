from django.shortcuts import render, redirect
from django.contrib.auth import authenticate, login, logout
from django.contrib.auth.models import User
from django.contrib import messages
from django.contrib.auth.decorators import login_required  # <--- Import this

# --- PROTECTED VIEWS (Requires Login) ---

@login_required(login_url='login')
def home(request): 
    return render(request, 'home.html')

@login_required(login_url='login')
def music(request): 
    return render(request, 'music.html')

@login_required(login_url='login')
def movies(request): 
    return render(request, 'movies.html')

@login_required(login_url='login')
def tv(request): 
    return render(request, 'tv.html')

@login_required(login_url='login')
def news(request): 
    return render(request, 'news.html')

@login_required(login_url='login')
def sports(request): 
    return render(request, 'sports.html')

@login_required(login_url='login')
def profile(request): 
    return render(request, 'profile.html')


# --- AUTHENTICATION VIEWS ---

def login_user(request):
    if request.user.is_authenticated:
        return redirect('home')  # If already logged in, skip login page
        
    if request.method == 'POST':
        u = request.POST.get('username')
        p = request.POST.get('password')
        
        user = authenticate(request, username=u, password=p)
        if user is not None:
            login(request, user)
            return redirect('home')
        else:
            messages.error(request, "Invalid username or password.")
            
    return render(request, 'login.html')

def register_user(request):
    if request.user.is_authenticated:
        return redirect('home')
        
    if request.method == 'POST':
        u = request.POST.get('username')
        e = request.POST.get('email')
        p = request.POST.get('password')
        p2 = request.POST.get('confirm_password')
        
        if p != p2:
            messages.error(request, "Passwords do not match.")
            return redirect('register')
            
        if User.objects.filter(username=u).exists():
            messages.error(request, "Username already taken.")
            return redirect('register')
            
        user = User.objects.create_user(username=u, email=e, password=p)
        user.save()
        
        login(request, user)
        return redirect('home')

    return render(request, 'register.html')

def logout_user(request):
    logout(request)
    return redirect('login')  # Sends them back to login page on logout