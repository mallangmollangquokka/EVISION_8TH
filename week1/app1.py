from flask import Flask, request, render_template, session, redirect, url_for, make_response
app = Flask(__name__,template_folder='flask_project/templates')
app.secret_key ='dev-secret'
@app.route('/')
def home():
    return render_template('index.html')

