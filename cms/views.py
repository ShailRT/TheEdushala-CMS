from hashlib import new
from django.shortcuts import render, get_object_or_404, redirect

from .models import CollegeModel, CourseModel
from lms.forms import LeadForm
import re

def college_page(request, college_slug):
    college = get_object_or_404(CollegeModel, slug = college_slug)
    course_tab = re.split(' |\r\n', college.courses_table)
    ct_course = []
    ct_fees = []
    ct = {}
    current = ''
    for i in range(len(course_tab)):
        if i%2==0:
            ct[course_tab[i]]= ''
            current = course_tab[i]
        else:
            ct[current] = course_tab[i]

    return render(request, 'college.html', {'college': college, 'ct_course':ct_course, 'ct_fees':ct_fees, 'ct': ct})

def course_page(request, course_slug):
    course = get_object_or_404(CourseModel, slug=course_slug)
    new_course = CourseModel.objects.all()[0:8]
    course_tab = re.split('-',course.courses_table)
    if request.method == 'POST':
        form = LeadForm(request.POST)
        if form.is_valid():
            form.save()
            return redirect('course-page',course_slug = course_slug)
    else:
        form = LeadForm()


    # c_key = [f.name for f in CourseModel._meta.get_fields()]
    return render(request, 'course.html', {'course': course, 'new_course': new_course, 'form': form})


