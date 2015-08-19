# Form Builder

## Description
This class generates a form in a tabular view.  Validation of fields is also an added feature
which is optional.

## Dependencies
* Common
* DB

## Class Members
* addRule
* addElement
* addOptions
* setDefault
* setErrorMode
* display
* validate
* isSame
* isSubmit
* create_input
* create_textarea
* create_submit
* create_select
* create_checkbox
* create_header
* getValue
* createAssocForOptions

## Login Form Example
Creates a form tag with the id `frmLoginForm`.  The form will wrap a div tag with id of `contentLogin`.  A login name, password and submit button are added to the form.
```
  $myForm = new FormBuilder("frmLoginForm");
  $myForm->setDivTag("contentLogin");
  $myForm->addElement("text", "email", "Email: ", "txtLoginName");
  $myForm->addElement("password", "password", "Password: ", "txtPassword");
  $myForm->addElement("submit", "btnLogin", "Login", "btnLogin");			
```	
To make the email and password fields required.  Add the following rules:

```
  $myForm->addRule("email", "required", "Email");
  $myForm->addRule("password", "required", "Password");
  
  $myForm->setErrorMode("popupbox");
```
Errors will appear as a popup.

To add logic to process the form or respond to form errors.  Create the following logic:

```
  if($myForm->validate()) {
    $this->processLogin($_POST, "btnLogin");
  } else {
    $myForm->display();
    ?><a onclick="getForgotPassword();">Forgot Password?</a><br /><?
  }	
```
The if condition will check to see if the form is valid then process the input from the client otherwise render the error messages.
