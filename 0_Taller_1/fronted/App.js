//import { StatusBar } from 'expo-status-bar'; <StatusBar style="auto" />
import { StyleSheet, Text, View, Button, Image, TextInput, FlatList, useState } from 'react-native';

export default function App() {
  return (
    <View style={styles.container}>
      {/* Para poner texto es con Text */}
      <Text style={styles.titulo}>TALLER CALIFICABLE 1</Text>
      <Text style={styles.letra}>5 razones para ver la asignatura:</Text>
      {/* Para crear una lista de cosas */}
      <FlatList
        data={[
          {key: 'Conocimientos nuevos'},
          {key: 'Oportunidades en el campo laboral'},
          {key: 'Complicada pero trabajable'},
          {key: 'Demasiado aprendizaje'},
          {key: 'El profe es el mejor'},
        ]}
        // Para renderizar el item creado
        renderItem={({item}) => <Text style={styles.item}>{item.key}</Text>}
      />
      <TextInput placeholder='Ingrese su cédula: ' style={styles.input} />
      <Button color="green" title="Haz click" />
      <Image source={{uri: 'https://www.eluniverso.com/resizer/IX818Ewt6Sf5nUstH_ULvy0IopQ=/1001x670/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/5WYTZSATWVEUBJHSHXLOACTULI.jpg'}} style={styles.imagen} />
    </View>
    

  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
  },
  titulo: {
    flex: 1,
    fontSize: 45,
    fontWeight: 'bold',
    color: 'red',
  },
  letra: {
    fontSize: 20,
    fontWeight: 'bold',
    color: 'black',
    backgroundColor: '#2fbf',
    borderRadius: 15,
  },
  input: {
    marginTop: 10,
    fontSize: 20,
    color: 'blue',
  },
  imagen: {
    width: 500,
    height: 500,
  },
  item: {
    fontSize: 18,
    height: 25,
  },
});
