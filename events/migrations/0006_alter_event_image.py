# Generated by Django 3.2.9 on 2021-11-26 23:44

from django.db import migrations, models
import events.models


class Migration(migrations.Migration):

    dependencies = [
        ('events', '0005_alter_event_image'),
    ]

    operations = [
        migrations.AlterField(
            model_name='event',
            name='image',
            field=models.ImageField(upload_to=events.models.upload_image_event),
        ),
    ]
