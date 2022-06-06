from django.db import models

class UserLead(models.Model):
    name = models.CharField(max_length=200)
    phone = models.CharField(max_length=12)

    def __str__(self):
        return self.name
