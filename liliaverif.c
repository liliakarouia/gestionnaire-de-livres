 #include <stdlib.h>
#include <stdio.h>
#include <string.h>
#include "index.h"



void liretext(char *allo){
	char ti[strlen(allo)];
	strcpy(ti,allo);
	for(int i=0;i<strlen(allo);i++){
		printf("%c",ti[i]);
	}
	printf("\n");
}


void verif(char *phrase){
 FILE* fichier = NULL;
 fichier = fopen("listeLivre.txt", "r");

 
 char bg;  
 int taille =strlen(phrase);
 char chaine[taille];
 strcpy(chaine, phrase);
 char *ts;
 char tab[taille];
int i=0;



  if (fichier != NULL)
         
    {
        do 
        {
     	
        bg = fgetc(fichier); 
        
        tab[i]=bg;
       
        i++;
        } while ( i < taille); 

     }
ts = tab;
liretext(phrase);
liretext(ts);


int rs = strcmp(chaine,tab);
printf("%d \n", rs);

       if ( rs == 0)
    {

        printf("Les chaines sont identiques\n");
    }
    else
    {

        printf("Les chaines sont differentes\n");
    }

        
  
        fclose(fichier);
  }



int main(int argc, char const *argv[])

{

 char *azerty ="bonjour";


  verif(azerty);
return 0;

}