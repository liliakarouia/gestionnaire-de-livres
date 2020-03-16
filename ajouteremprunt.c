#include <stdlib.h>
#include <stdio.h>
#include <string.h>
#include "index.h"



void ajouteremprunt(){
    FILE *fichier = NULL;
    fichier =  fopen("listeemprunt.txt", "a");
    
    fclose(fichier);

}