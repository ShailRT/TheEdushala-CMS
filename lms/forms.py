from tkinter import Widget
from django import forms

from .models import UserLead

class LeadForm(forms.ModelForm):
    class Meta:
        model = UserLead
        fields = ['name', 'phone']
        widgets = {
            'name' : forms.TextInput(attrs={'class':"form-control input-lg  br-ts-7  br-bs-7 rounded-0", 'placeholder': "Enter your Name", 'type':"text"}),
            'phone' : forms.TextInput(attrs={'class': "form-control input-lg  border-end border-muted rounded-0 rounded-end", 'placeholder': "Contact Number", 'type':"text"})
        }
        labels = {
            'name' : '',
            'phone' : ''
        }
class EnquiryForm(forms.ModelForm):
    class Meta:
        model = UserLead
        fields = ['name', 'phone']
        widgets = {
            'name' : forms.TextInput(attrs={'class': 'form-control'}),
            'phone' : forms.TextInput(attrs={'class': 'form-control'}),
        }