# Corona-War

# Commit 1 
added homepage
added corona cases tracker
added animations
added google translate plugin sitewide

# Commit 2
adding the dataset - normalized and cleaned
adding the code to do basic inference on dataset about the plots and basic modifications.

# Commit 3
added 4 files (Form.php, header.php, footer.php, main.js)

Fuctions - 

1. Form.php : Shows a materialistic form as well as an integrated Worldwide Corona Tracker. The form is used to 
take user information as well as their symptoms response.
2. Header.php : Integrated accessibility features along with a universal Language Translator and a Dark Mode feature.
3. Footer.php : Credentials and basic footer.
4. Main.js : This has two functions, First is to take the entries of the form and update it in the Firebase Realtime Database.
Second Function is to generate a unique key ID for the User which can be used for retaining the results stored in the Firebase by the AI Model.

# Commit 4
added 1 file (query.py)

Fuctions - 

1. Python Code to query the database - Firebase.
2. Update the variable to send to the model for generating the inference part
 

# Commit 5

Plotting, Analysing, Scaling, transformation of dataset 

# Commit 6

Added 2 files (stat.php, Read.js)

Functions - 

1. stat.php : Contains the code for displaying the data from the Firebase when the User enters the key.
2. Read.js : Contains the backend code for retreiving the fields of the entered key from the Firebase database.

# Commit 7
modified 1 file (query.py)

Fuctions - 

1. Implemented twilio api to send text message to users the key generated and also updating them about the updates on the inference results. 

# commit 8 
1. added form and result pages
2. integrated them with the homepage
3. integrated them with firebase

# commit 9
1. made the form page responsive
 
# Commit 10
added 2 files (hospital_data.xls and firebase_hospital_data.py)

Fuctions - 

1. Excel sheet made using a webcrawler for the website : https://covid.uhcitp.in/status/dashboard
2. Using the python script upload the data to the firebase-database.

# Commit 11
1.Selecting the model and fine tuning 
