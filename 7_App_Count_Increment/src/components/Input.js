import { StyleSheet, Text, View, TextInput, Button } from 'react-native'

// Importamos el Hook useState
import React, { useState } from 'react';

export default function Input() {
    // Variable que almacena el texto que se introduce en el input
    const [input, setInput] = useState('');

    // Variable que almacena el texto que se introduce en el input2
    const [input2, setInput2] = useState('');

    function agregarElemento() {
        // Agregamos el texto introducido en el input al array
        setInput2(input)
    }

  return (
    <View style={styles.container}>
      <Text>Input</Text>

      {/* Creamos un campo para ingresar texto */}
        <TextInput
            // Guardamos el texto introducido en la variable input
            onChangeText={text => setInput(text)}
            // Ponemos un placeholder para indicar al usuario que debe introducir texto
            placeholder="Nuevo elemento"
        />

        {/* Creamos un campo para ingresar texto a mostrar en el input 1 */}
        <TextInput
            // Ponemos un placeholder para indicar al usuario que debe introducir texto
            placeholder="Nuevo elemento"
            // Mostramos el texto introducido en la variable input
            value={input2}
        />

        <Button title="Agregar elemento" onPress={agregarElemento} />

    </View>
  )
}

const styles = StyleSheet.create({
    container: {
      backgroundColor: '#fff',
      alignItems: 'center',
      justifyContent: 'center',
    },

    TextInput:{
        borderColor: 'gray',
        borderWidth: 1
    },

  });