import { StyleSheet, Text, View, TextInput, Button } from 'react-native'

// Importamos el Hook useState
import React, { useState } from 'react';


export default function Input2() {
    // Variable que almacena el texto que se introduce en el input
    const [input, setInput] = useState('Hola mundo');

    function ChangeText() {
        if (input == 'Hola React Native')
            setInput('Hola mundo')
        else
            setInput('Hola React Native')
    }

  return (
    <View>
      <Text>{input}</Text>

      <Button title="Cambiar texto" onPress={ChangeText} />
    </View>
  )
}

const styles = StyleSheet.create({})