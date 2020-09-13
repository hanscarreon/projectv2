import sys
import scipy
import numpy #numpy for number integration#
import matplotlib # data analysis#
import pandas
import sklearn # for machine learning#
from nltk.corpus import sentiment;
from nltk  import *

totalLines = int
pos = float
neg = float
pos_percent = float
neg_percent = float

positive_text = sentiment.strings('positive_text.json')
negative_text = sentiment.strings('negative_text.json')
positive_text_percentage = 100;
negative_text_percentage = 100;
text = sentiment.strings('text.20150430-223406.json')



if(text == positive_text):
	if(positive_text > 50 ):
		print('positive')
		{
		totalLines : 
		pos : 
		pos_percent : 
		}

elif(text == negative_text):
	if(negative_text > 50):
		print('negative')
		{
		totalLines :
		neg :
		neg_percent :
		}
elif(text == 50):
	if(positive_text == 50 && negative_text == 50):
		print('neutral')
		{
		totalLines :
		pos :
		neg :
		pos_percent :
		neg_percent :
		}
else:
	print('invalid')
	