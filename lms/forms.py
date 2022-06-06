from django.forms import ModelForm 

from .models import UserLead

class LeadForm(ModelForm):
    class Meta:
        model = UserLead
        fields = ['name', 'phone']