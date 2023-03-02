int main()
{
int N=50;
	printf("**************** This is a Random Guess Game **************** \n **************** choose number between 1 to 50  **************** \n**************** you can guess number in 5 attempt **************** \n\n\n");
  guess(N);
    return 0;
}
void guess(int N)

{
    int number, guess, numberofguess = 0;

    number = rand() % N;
  
    printf("Guess a number between"
           " 1 and %d\n",N);
    do {
  
        if (numberofguess > 4) {
            printf("\nYou Loose!\n");
            break;
        }
  
        scanf("%d", &guess);
        if (guess > number)
  
        {
            printf("Lower than number %d "
                   "please retry\n",guess);
            numberofguess++;
        }
  
        else if (number > guess)
  
        {
            printf("Higher than number %d"
                   " please retry\n",guess);
            numberofguess++;
        }
  
        else
            printf("You guessed the"
                   " number in %d "
                   "attempts!\n Correct Number is %d",
                   numberofguess,guess);
  
    } while (guess != number);
}
  

