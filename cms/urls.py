from django.urls import path
from . import views 

urlpatterns = [
    path('college/<slug:college_slug>/', views.college_page, name='college-page'),
    path('course/<slug:course_slug>/', views.course_page, name='course-page'),

]