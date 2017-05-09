import java.util.Scanner;
public class Les6{
  public static void main(String[] args) {
      Les6 les6 = new Les6();
}
  public Les6(){
    solveproblem();

  }
  private void showProblem(){
    //Met de onderstaande code kun je een appel eten.
    //Wat nu als je meer appels wil kunnen eten?
    //Moet ik dan de complete code kopieren?

    //Opdracht 1
    //Lees de onderstaande code regel voor regel door en zet per regel, in een comment erachter, wat de code doet
    //Als je een regel niet begrijpt zet je er een vraagteken achter.
    //Stel in de les vragen over regels die je niet begrijpt.

    //Opdracht 2
    //Pas de onderstaande code aan zodat je 3 appels tegelijk kunt eten.
    //Je hoeft nog niet te switchen tussen de appels met het "next" commando.

    Apple apple1 = new Apple();
    Apple apple2 = new Apple();
    Apple apple3 = new Apple(); //roept de appel class op
    Scanner scanner = new Scanner(System.in); // maakt een nieuwe scanner

    while(true){//maakt een while loop die voert hem elke keer weer opnieuw uity
      System.out.println("eat, look, next or exit?");// hier print hij een vraag uit in de command line
      String input = scanner.next();// hier kan je input geven

      if(input.equals("eat")){//hier maakt hij een if loop als je input eat is dan voert hij de code uit
          apple1.takeBite();
          apple2.takeBite();
          apple3.takeBite();// hier voert hij de eat code uit
      }
      else if(input.equals("look")){// deze code is als je niet eat,exit,next hebt getypt dan voert hij deze code uit
        apple1.printAppleStatus();// hier vort hij de code uit
      }
      else if(input.equals("exit")){// deze code is als je niet eat,look,next hebt getypt dan voert hij deze code uit
        break;// hier stopt de code als ie uit gevoerd word
      }else if(input.equals("next")){// deze code is als je niet eat,look,exit hebt getypt dan voert hij deze code uit
        //ga naar de volgende appel
        System.out.println("there is only one apple!");// hier geeft hij je een text met "there is only one appel"
      }else{// als de vorige code false is dan voert hij de code hieonder uit
        System.out.println("i don't understand.");// hier geeft hij je text in cmd "ï dont understand"
      }
    }
  }
    //Opdracht 3
    //Maak een nieuwe functie aan met de naam solveProblem.
    //Plak de code voor het eten van de 3 appels erin.
    //Pas de code aan zodat je met behulp van een array 20 appels kunt eten met het "eat" commando.
    public void solveproblem(){
      Apple[] apples = new Apple[20];
      Scanner scanner = new Scanner(System.in);


      for(int i = 0; i<apples.length; i++) {
        apples[i] = new Apple();
      }

      while(true){
        System.out.println("eat, look, next or exit?");
        String input = scanner.next();

        if(input.equals("eat")){
            
for(int index = 0; index < apples.length; index++)
            apples[index].takeBite();
        }
        else if(input.equals("look")){
            for(int index = 0; index < apples.length; index++)
            apples[index].printAppleStatus();
        }
        else if(input.equals("exit")){
          break;
        }else if(input.equals("next")){
          System.out.println("??");
        }else{
          System.out.println("I don't understand.");
        }
      }
    }







    //Opdracht 4
    //Pas de code zo aan dat je ook 20 appels kunt bekijken met het "look" commando.
    

    //Extra opdracht 5
    //Verzin een manier om te switchen tussen de appels,
    //zodat je niet alle appels tegelijk eet maar dat je ze 1 voor 1 kunt eten en bekijken.
    //Gebruik hiervoor het "next" commando.

}
