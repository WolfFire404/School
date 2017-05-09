public class Array{

  public static void main(String[] args) {

    int[] cijferPRO = {39, 67, 33, 16, 4, 10, 19, 55, 666, 43};
    System.out.println(cijferPRO[2]);
    System.out.println(cijferPRO[7]);
    System.out.println(cijferPRO[5]);

    int total = 0;
    for(int i = 0 ; i < 11 ; i++ ){
      total = total + cijferPRO[i];
    }



  }




}
