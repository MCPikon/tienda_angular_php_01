import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Videojuego } from './modelos/Videojuego';

@Injectable({
  providedIn: 'root'
})
export class VideojuegosService {

  constructor(private http:HttpClient) { }

  obtenerDatos():Observable<Videojuego[]> {
    return this.http.get<Videojuego[]>('/server/obtenerVideojuegos.php');
  }
}
