#!/bin/bash

ENDPOINT="http://seu-endpoint.com/api"
RASP_ID="ID_DO_RASPBERRY"  # Substitua pelo ID do Raspberry Pi
FILIAL_ID="ID_DA_FILIAL"  # Substitua pelo ID da filial

echo "Aguardando leitura do código de barras..."

while true; do
    # Captura o código de barras do scanner
    read -r CODIGO  # Captura o input do scanner

    # Captura a data e hora atual
    DATETIME=$(date '+%Y-%m-%d %H:%M:%S')

    # Envia o código de barras e outros dados para o endpoint
    curl -X POST -H "Content-Type: application/json" \
         -d "{\"barcode\":\"$CODIGO\", \"datetime\":\"$DATETIME\", \"rasp_id\":\"$RASP_ID\", \"filial_id\":\"$FILIAL_ID\"}" \
         $ENDPOINT

    echo "Código de barras $CODIGO enviado com sucesso!"
done
