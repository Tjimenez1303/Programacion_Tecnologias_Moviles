//rnfs
import { StyleSheet, Text, View } from 'react-native'
import React from 'react'

// Importamos el componente Tabla
import {Table, Row, Col} from 'react-native-table-component'

export default function Tabla() {
  return (
    <View>
      <Text>Tabla para ver Libros</Text>

      <Table>
        <Row data={['Columna 1', 'Columna 2']} />
        <Row data={['papas', '3']} />
        <Row data={['tomates', '10']} />
      </Table>
    </View>
  )
}

const styles = StyleSheet.create({})