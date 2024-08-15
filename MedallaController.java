package com.ejemplo.olimpicos.controller;

import com.ejemplo.olimpicos.model.Medalla;
import com.ejemplo.olimpicos.repository.MedallaRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;

@Controller
public class MedallaController {

    @Autowired
    private MedallaRepository medallaRepository;

    @GetMapping("/")
    public String index(Model model) {
        model.addAttribute("medallas", medallaRepository.findAll());
        return "medallas";
    }

    @PostMapping("/add")
    public String addMedalla(@RequestParam String pais, @RequestParam String tipo, @RequestParam int cantidad) {
        Medalla medalla = new Medalla();
        medalla.setPais(pais);
        medalla.setTipo(tipo);
        medalla.setCantidad(cantidad);
        medallaRepository.save(medalla);
        return "redirect:/";
    }
}