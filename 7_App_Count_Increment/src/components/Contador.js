import { StyleSheet, Text, View, Button } from 'react-native';

// Importamos el Hook useState
import React, { useState } from 'react';

export default function Contador() {
    // Contador que se va a incrementar y decrementar alterando su estado coon useState
    const [contador, setContador] = useState(0);

    // Función para incrementar el contador
    function aumentarContador() {
        setContador(contador+1)
    }
  
    // Función para decrementar el contador
    function disminuirContador() {
        setContador(contador-1)
    }

  return (
    <View style = {styles.container}>

      {/* Variable que se muestra en la pantalla que va incrementando y decrementando */}
      <Text>{contador}</Text>

      {/* Botones que llaman a las funciones de incrementar y decrementar */}
      <Button title="Aumentar" onPress={aumentarContador} />
      <Button title="Disminuir" onPress={disminuirContador} />

    </View>
  )
}

const styles = StyleSheet.create({
    container: {
      backgroundColor: '#fff',
      alignItems: 'center',
      justifyContent: 'center',
    },
  });