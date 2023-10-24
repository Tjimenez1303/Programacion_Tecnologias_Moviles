import { StatusBar } from 'expo-status-bar';
import React from 'react'
import { StyleSheet, Text, View} from 'react-native';

// Imoportamos el componente de contador
import Contador from './src/components/Contador';

// Importamos el componente de input
import Input from './src/components/Input';
// Importamos el componente de input2
import Input2 from './src/components/Input2';

// Importamos el componente de Hora
import Hora from './src/components/Hora';

export default function App() {

  return (
    <View style={styles.container}>

    <Contador></Contador>
    <Input></Input>
    <Input2></Input2>
    <Hora></Hora>

    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
