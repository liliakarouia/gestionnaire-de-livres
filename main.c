#include <stdlib.h>
#include <stdio.h>
#include <string.h>
#include "index.h"


int main(int argc, char *argv[])
{


    int boucle = 1;
    while(boucle){
        char c ;
        printf("souhaitez vous rajouter un livre ? (Y/N)\n");
        scanf("%c",&c);
       
        if (c != 'Y' && c != 'y'&& c!= 'n' && c!= 'N'){
            printf("erreur commande inconnue\n");
        }
       
        if(c == 'Y' || c == 'y'){
         ajouterlivre();
        }
       
        else{
            if(c == 'N' || c == 'n'){
        printf("fin du programme");
        boucle = 0;
        }
        }

    }

return 0;
}