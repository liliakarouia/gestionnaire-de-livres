#include <stdlib.h>
#include <stdio.h>
#include <string.h>
#include "index.h"


void ajouterclient(){
   FILE *fichier = NULL;
    fichier =  fopen("listeclient.txt", "a");
    
    fclose(fichier);

}