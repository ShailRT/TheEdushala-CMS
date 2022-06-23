from hashlib import new
from django.shortcuts import render, get_object_or_404, redirect
from django.db.models import Q

from .models import CollegeModel, CourseModel, Navbar
from lms.forms import LeadForm, EnquiryForm
import re


def college_page(request, college_slug):
    college = get_object_or_404(CollegeModel, slug=college_slug)
    related_col = []
    if CollegeModel.objects.filter(Q(name__contains=college.name[3]) | Q(location__contains=college.location[5])).exists():
        related_col = CollegeModel.objects.filter(Q(name__contains=college.name[3]) | Q(location__contains=college.location[5])).exclude(name=college.name)
    course_tab = re.split('-|\r\n', college.courses_table)
    ct = {}
    current = ''
    for i in range(len(course_tab)):
        if i % 2 == 0:
            ct[course_tab[i]] = ''
            current = course_tab[i]
        else:
            ct[current] = course_tab[i]
    if request.method == 'POST':
        form = LeadForm(request.POST)
        if form.is_valid():
            form.save()
            return redirect('college-page', college_slug=college_slug)
    else:
        form = LeadForm()

    return render(request, 'college.html', {'college': college, 'related_col': related_col, 'ct': ct, 'form': form})


def course_page(request, course_slug):
    course = get_object_or_404(CourseModel, slug=course_slug)
    new_course = CourseModel.objects.all()[0:8]
    if request.method == 'POST':
        form = LeadForm(request.POST)
        if form.is_valid():
            form.save()
            return redirect('course-page', course_slug=course_slug)
    else:
        form = LeadForm()

    # c_key = [f.name for f in CourseModel._meta.get_fields()]
    return render(request, 'course.html', {'course': course, 'new_course': new_course, 'form': form})

def home_page(request):
    college = CollegeModel.objects.all()[:4]
    if request.method == "POST":
        form = LeadForm(request.POST)
        if form.is_valid():
            form.save()
            redirect('home-page')
    else:
        form = LeadForm()
    navbar = Navbar.objects.all()[:8]
    return render(request, 'index.html',{'college': college, 'form': form, 'navbar': navbar})