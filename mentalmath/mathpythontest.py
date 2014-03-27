import logging
import random
import wsgiref.handlers
from google.appengine.ext import webapp

class MainHandler():

	# ::::GLOBAL VARIABLES:::
	# THAT NEEED TO BE IN MEMORY WHEN THE USER PLAYES THE MATH GAME
	#
	Keep_playing = 0
	points = 10
	level = 5
		
	#Operator dictionary and operator level definition 
	operator_level_dic = {'Hard':4,'Medium':3, 'Easy':2, 'Simple':1}
	operator_level = 1
	
	#CODE
	formstring = '''<form method="post" action="/"><p>Enter Guess: <input type="text" name="guess"/></p><p><input type="submit"></p></form>'''
	
	#
	# RANDOM NUMBER GENERATOR
	# - BASES THE RANDOM NUMBER ON WHAT LEVEL THE PLAYER IS ON
	#
	def random_number( level ):
		if level < 10:
			return random.randrange(1, 10, 1)  # Even integer from 0 to 10
		elif 10 > level < 100:
			return random.randrange(10, 100, 1)  # Even integer from 10 to 100
		elif 100 > level < 1000:
			return random.randrange(100, 1000, 1)  # Even integer from 100 to 1000
		elif 100 > level < 1000:
			return random.randrange(1000, 10000, 1)  # Even integer from 1000 to 10000
		else:
			return random.randrange(0, 100, 1)  # Even integer from 0 to 100

	#
	# RANDOM OPERATOR GENERATOR
	# - BASES ON WHAT LEVEL THE PLAYER IS ON
	#
	def random_operator( operator_level ):
		if operator_level == 1: #addition 
			return '+'  # Choose on of the different operators
		elif operator_level == 2: #addition 
			return random.sample(['+', '-'],  1)  # Choose on of the different operators
		elif operator_level == 3: #all
			return random.sample(['+', '-', '*', '/'],  1)  # Choose on of the different operators
		elif operator_level == 4: #addition
			return random.sample(['*', '/'],  1)  # Choose on of the different operators
			
	def print_math():
			guess = 0;
			number_One = random_number( level )

	# //////////////////////////////// MAIN ////////////////////////////////
	#          MAIN FUNCTION THAT LETS THE PLAYER PLAY THE GAME!
	
	def get(self):
		self.response.out.write('<p>PLAY A GAME:</p>\n')
		number_string = random_number(level)
		self.response.out.write('<p>', number_string, '</p>',)
		self.response.out.write(self.formstring)
		
	def post(self):
		answer = 42
		# gets the user input!
		stguess = self.request.get('guess')
		logging.info('User guess='+stguess)
		try:
			guess = int(stguess)
		except:
			guess = -1
    
		if guess == answer:
			msg = 'Congratulations'
			
		self.response.out.write('<p>Guess:'+stguess+'</p>\n')
		self.response.out.write('<p>'+msg+'</p>\n')
		self.response.out.write(self.formstring)

def main():

	
if __name__ == '__main__':
  main()









	
