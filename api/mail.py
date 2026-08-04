import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
from fastapi import FastAPI, HTTPException, BackgroundTasks
from pydantic import BaseModel, EmailStr

app = FastAPI()

# Configuración SMTP de Google
SMTP_SERVER = "smtp.gmail.com"
SMTP_PORT = 587
SENDER_EMAIL = "contacto@marcoangelgaleana.com"  # Tu correo de Google Workspace
SENDER_PASSWORD = "vtnw syen msjb zecv"    # Tu contraseña de aplicación de 16 caracteres

class ContactoForm(BaseModel):
    nombre: str
    email: EmailStr
    mensaje: str

def enviar_correos_contacto(nombre: str, email_cliente: str, mensaje: str):
    try:
        # Conexión al servidor SMTP de Google
        server = smtplib.SMTP(SMTP_SERVER, SMTP_PORT)
        server.starttls()
        server.login(SENDER_EMAIL, SENDER_PASSWORD)

        # -------------------------------------------------------------
        # 1. Correo Notificación PARA TI
        # -------------------------------------------------------------
        msg_notif = MIMEMultipart("alternative")
        msg_notif["Subject"] = f"Nuevo contacto web: {nombre}"
        msg_notif["From"] = SENDER_EMAIL
        msg_notif["To"] = SENDER_EMAIL
        msg_notif["Reply-To"] = email_cliente  # Para responderle directamente

        html_notif = f"""
        <h2>Nuevo mensaje desde la página web</h2>
        <p><strong>Nombre:</strong> {nombre}</p>
        <p><strong>Correo:</strong> {email_cliente}</p>
        <p><strong>Mensaje:</strong></p>
        <blockquote style="background: #f9f9f9; padding: 10px; border-left: 3px solid #ccc;">
            {mensaje}
        </blockquote>
        """
        msg_notif.attach(MIMEText(html_notif, "html"))
        server.sendmail(SENDER_EMAIL, SENDER_EMAIL, msg_notif.as_string())

        # -------------------------------------------------------------
        # 2. Correo de Agradecimiento PARA EL CLIENTE
        # -------------------------------------------------------------
        msg_gracias = MIMEMultipart("alternative")
        msg_gracias["Subject"] = "Gracias por ponerte en contacto"
        msg_gracias["From"] = SENDER_EMAIL
        msg_gracias["To"] = email_cliente

        html_gracias = f"""
        <h3>Hi {nombre},</h3>
        <p>Gracias por ponerte en contacto. He recibido tu mensaje correctamente.</p>
        <p>Me comunicaré contigo a la brevedad posible.</p>
        <br>
        <p>Saludos cordiales,</p>
        <p><strong>Tu Nombre / Empresa</strong></p>
        """
        msg_gracias.attach(MIMEText(html_gracias, "html"))
        server.sendmail(SENDER_EMAIL, email_cliente, msg_gracias.as_string())

        server.quit()

    except Exception as e:
        print(f"Error enviando correo: {e}")

@app.post("/api/contacto")
async def recibir_contacto(form: ContactoForm, background_tasks: BackgroundTasks):
    # Usamos BackgroundTasks para responder rápido al cliente web
    # mientras los correos se envían en segundo plano
    background_tasks.add_task(enviar_correos_contacto, form.nombre, form.email, form.mensaje)
    return {"status": "success", "message": "Mensaje enviado correctamente"}