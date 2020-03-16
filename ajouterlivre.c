#include <stdlib.h>
#include <stdio.h>
#include <string.h>
#include "index.h"

 
void ajouterlivre(){
   FILE *fichier = NULL;
    fichier =  fopen("listeLivre.txt", "a");
    int nbexemplaire = 0;
    char nomLivre[20];
    char nomAuteur[20];

    printf("Le nom du livre : ");
    scanf("%s",&nomLivre);
    
    printf("Auteur : ");
    scanf("%s",&nomAuteur);

    printf("Le nombre d'exemplaire: ");
    scanf("%d",&nbexemplaire);


    printf("Le nom du livre : %s \n", nomLivre);
    printf("Le nom de l'auteur :%s \n", nomAuteur);
    printf("Le nombre d'exemplaire : %d \n", nbexemplaire);


    fprintf(fichier, "%s %s %d\n",nomLivre, nomAuteur, nbexemplaire);
    fclose(fichier);

}