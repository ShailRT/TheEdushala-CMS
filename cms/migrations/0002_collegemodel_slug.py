# Generated by Django 4.0.4 on 2022-05-29 18:06

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('cms', '0001_initial'),
    ]

    operations = [
        migrations.AddField(
            model_name='collegemodel',
            name='slug',
            field=models.SlugField(default='new-col', max_length=200),
            preserve_default=False,
        ),
    ]
