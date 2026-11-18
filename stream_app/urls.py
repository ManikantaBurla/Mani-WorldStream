from django.urls import path
from . import views

urlpatterns = [
    path('', views.home, name='home'),
    path('music/', views.music, name='music'),
    path('movies/', views.movies, name='movies'),
    path('tv/', views.tv, name='tv'),
    path('news/', views.news, name='news'),
    path('sports/', views.sports, name='sports'),
    path('profile/', views.profile, name='profile'),

# Auth URLs
    path('login/', views.login_user, name='login'),
    path('register/', views.register_user, name='register'),
    path('logout/', views.logout_user, name='logout'),
]