FROM python:3.13-slim

WORKDIR /app

# Install dependencies
COPY requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

# Copy project files
COPY . .

# Expose port 8000
EXPOSE 8000

# Run migrations and start Gunicorn server on container boot
CMD python manage.py migrate --noinput && gunicorn config.wsgi:application --bind 0.0.0.0:8000