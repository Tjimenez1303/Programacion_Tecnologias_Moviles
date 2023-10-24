import { StyleSheet, Text, View } from 'react-native'
import React, { useState, useEffect } from 'react'

export default function Hora() {
    const [hora, setHora] = useState(new Date());

    // Actualizamos la hora cada segundo
    useEffect(() => {
        
        // Creamos un intervalo que ejecuta una función cada segundo
        const interval = setInterval(() => {
            setHora(new Date())
        }, 1000);

        // Limpiamos el intervalo
        return () => clearInterval(interval);
    }, []);

  return (
    <View>
      <Text>Hora Actual: {hora.toLocaleTimeString()}</Text>
    </View>
  )
}

const styles = StyleSheet.create({})