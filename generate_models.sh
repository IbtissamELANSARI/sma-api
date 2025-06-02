#!/bin/bash

# Array of models with attributes (name:attributes)
MODELS=(
  "Secteur:intitule"
  "Filiere:intitule,secteur_id"
  "Module:intitule,masse_horaire,filiere_id"
  "Competence:intitule,module_id"
  "Cours:intitule,competence_id"
  "Formateur:matricule,nom,email,secteur_id"
  "Groupe:intitule,filiere_id"
  "Stagiaire:code,nom,groupe_id,email,niveau_id"
  "Niveau:intitule"
  "Seance:weekday,start_time,end_time,formateur_id,groupe_id"
  "Demande:type_doc,motif,stagiaire_id"
  "Question:textQuestion,options,correct_option,score,competence_id"
  "Quiz:date,time,cours_id"
)

# Loop through the array
for ENTRY in "${MODELS[@]}"
do
  # Split model and attributes
  IFS=":" read -r MODEL ATTRIBUTES <<< "$ENTRY"

  # Convert to lowercase plural for table names (Laravel style)
  TABLE=$(echo "$MODEL" | awk '{print tolower($0)"s"}')

  # Create model with migration
  php artisan make:model "$MODEL" -mf

  # Add fillable fields
  ATTR_ARRAY=$(echo "$ATTRIBUTES" | tr "," "\n")
  FILLABLE=$(echo "$ATTRIBUTES" | sed 's/,/","/g')
  
  # Insert fillable into the model file
  sed -i '' "/class $MODEL extends Model/a\\
    \ \ protected \$fillable = [\"$FILLABLE\"];
  " "app/Models/$MODEL.php"

  echo "✅ Created $MODEL model and migration."
done
