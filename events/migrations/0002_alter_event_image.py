# Generated by Django 3.2.9 on 2021-11-26 00:30

from django.db import migrations, models
import events.models


class Migration(migrations.Migration):

    dependencies = [
        ('events', '0001_initial'),
    ]

    operations = [
        migrations.AlterField(
            model_name='event',
            name='image',
            field=models.FileField(upload_to=events.models.upload_image_event),
        ),
    ]
