import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View } from 'react-native';

// Importamos el componente Formulario
import Formulario from './src/components/Formulario';

export default function App() {
  return (
    <View style={styles.container}>

      <Formulario></Formulario>

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
