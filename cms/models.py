from codecs import backslashreplace_errors
from string import digits
from django.db import models


class CourseModel(models.Model):
    name = models.CharField(max_length=200)
    overview = models.TextField(blank=True, null=True)
    admission = models.TextField(blank=True, null=True)
    eligibilty = models.TextField(blank=True, null=True)
    entrance = models.TextField(blank=True, null=True)
    fees = models.TextField(blank=True, null=True)
    fees_table = models.TextField(blank=True, null=True)
    colleges = models.TextField(blank=True, null=True)
    salary = models.TextField(blank=True, null=True)
    slug = models.SlugField(max_length=200)
    date_added = models.DateTimeField(auto_now_add=True)

    class Meta:
        ordering = ['-date_added']

    def __str__(self):
        return self.name


class CollegeModel(models.Model):
    name = models.CharField(max_length=200)
    location = models.CharField(max_length=200)
    slug = models.SlugField(max_length=200)
    rating = models.DecimalField(max_digits=2, decimal_places=1)
    photo = models.ImageField(upload_to='uploads/', blank=True, null=True)
    affilation = models.CharField(max_length=200)
    type = models.CharField(max_length=200, blank=True, null=True)
    rank = models.CharField(max_length=250, blank=True, null=True)
    information = models.TextField(blank=True, null=True)
    courses = models.TextField(blank=True, null=True)
    courses_table = models.TextField(blank=True, null=True)

    admission = models.TextField(blank=True, null=True)
    placement = models.TextField(blank=True, null=True)
    ranking = models.TextField(blank=True, null=True)
    fees = models.TextField(blank=True, null=True)
    eligibility = models.TextField(blank=True, null=True)
    date_added = models.DateTimeField(auto_now_add=True)

    class Meta:
        ordering = ['-date_added']

    def __str__(self):
        return self.name


class Navbar(models.Model):
    page_type = models.CharField(max_length=120)
    col = models.OneToOneField(CollegeModel, on_delete=models.CASCADE, null=True, blank=True)
    cr = models.OneToOneField(CourseModel, on_delete=models.CASCADE, null=True, blank=True)
     

    def __str__(self):
        return self.page_type

    
