from django.contrib import admin
from .models import CollegeModel, CourseModel, Navbar

# Register your models here.

admin.site.register(CollegeModel)
admin.site.register(CourseModel)
admin.site.register(Navbar)