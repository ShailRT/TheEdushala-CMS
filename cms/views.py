from hashlib import new
from django.shortcuts import render, get_object_or_404, redirect

from .models import CollegeModel, CourseModel
from lms.forms import LeadForm

def college_page(request, college_slug):
    college = get_object_or_404(CollegeModel, slug = college_slug)
    return render(request, 'college.html', {'college': college})

def course_page(request, course_slug):
    course = get_object_or_404(CourseModel, slug=course_slug)
    new_course = CourseModel.objects.all()[0:8]
    if request.method == 'POST':
        form = LeadForm(request.POST)
        if form.is_valid():
            form.save()
            return redirect('course-page',course_slug = course_slug)
    else:
        form = LeadForm()


    # c_key = [f.name for f in CourseModel._meta.get_fields()]
    return render(request, 'course.html', {'course': course, 'new_course': new_course, 'form': form})


