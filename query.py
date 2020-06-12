import requests
import json

# account_sid = 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
# auth_token = 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
# client = Client(account_sid, auth_token)
r = requests.get(
    "https://corona-tracker-22cc2.firebaseio.com/messages.json?orderBy=%22$key%22&limitToLast=1")
keys = r.json()
predict_data = [[]]
phone_num = "trial"
key_data = "asdasd"
for key in keys:
    key_data = key
    fever = int(keys[key]['fever'])
    tiredness = int(keys[key]['tiredness'])
    dry_cough = int(keys[key]['dryCough'])
    difficult_breathing = int(keys[key]['difficultyBreathing'])
    sore_throat = int(keys[key]['soreThroat'])
    no_symptom = int(keys[key]['noSymptom'])
    pains = int(keys[key]['pain'])
    nasal_cong = int(keys[key]['nasalCongestion'])
    runny_nose = int(keys[key]['runnyNose'])
    diarrhea = int(keys[key]['diarrhea'])
    none_exp = int(keys[key]['noneExperiencing'])
    age = keys[key]['age']
    phone_num = "+91" + keys[key]['phoneNumber']
    age_0_9 = 0
    age_10_19 = 0
    age_20_24 = 0
    age_25_59 = 0
    age_60 = 0
    if (age == "0-9"):
        age_0_9 = 1
    elif (age == "10-19"):
        age_10_19 = 1
    elif (age == "20-24"):
        age_20_24 = 1
    elif (age == "25-59"):
        age_25_59 = 1
    elif (age == "60+"):
        age_60 = 1
    gender = keys[key]['gender']
    gender_m = 0
    gender_f = 0
    gender_n = 0
    if (gender == "Male"):
        gender_m = 1
    elif (age == "Female"):
        gender_f = 1
    elif (age == "Transgender"):
        gender_n = 1
    predict_data = [[fever,
                     tiredness,
                     dry_cough,
                     difficult_breathing,
                     sore_throat,
                     no_symptom,
                     pains,
                     nasal_cong,
                     runny_nose,
                     diarrhea,
                     none_exp,
                     age_0_9,
                     age_10_19,
                     age_20_24,
                     age_25_59,
                     age_60,
                     gender_m,
                     gender_f,
                     gender_n]]
print(predict_data)
