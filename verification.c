#include <stdlib.h>
#include <stdio.h>
#include <string.h>
#include "index.h"


int verifie(char *livre, char *auteur){
   FILE *fichier = NULL;
    fichier =  fopen("listeLivre.txt", "r");
    int taille1 =strlen(livre);
    int taille2 =strlen(auteur);
  // printf("%d", taille1);

    char text1[taille1];
    char text2[taille2 - 1];
    int b;
    int c;
    int deux = 0;
    char ca;
    int i = 0;
    int ligne = 1;
    int res;

    while(c != EOF){
         c = getc(fichier);
        
        
         if  (c != ' '){
             if(c == '\n'){
                 for(int u = 0;i<= taille2 ; u++){
                     printf("%c",text2[u]);
                 }
                 for(int u = 0;i<= taille1 ; u++){
                     printf("%c",text1[u]);
                 }
                 b = strcmp(text1,livre);
                 ca = strcmp(text2,auteur);
                 printf("\n%d et %d \n", b , ca);
                 res = b + ca;
                
                 if(res == 2){
                     printf("correspondance trouvee a la ligne %d", ligne);
                     return 1;
                 }

                 else {
                    ligne++;
                    deux = 0;
                    i = 0;
                 }

                
             }
             switch (deux)
             {
             case 0:
                text1[i] = c;
               
                 break;
            
             case 1:
              text2[i] = c;
             // printf("\n %d %c\n", ligne, c);
              break;
             
            
             }
             
             
            // printf("%c,", text1[i]);
         }
         else {
             deux++;
             i = 0;
            // printf("ESPACE");
            }
         i++;

             
         }
         
    //printf("pas de correspondance trouvee");
    //return -1;
    fclose(fichier);

}

int main(){
    char *abc = "tintin";
     char *tbc = "mort";


    verifie(abc,tbc);
}