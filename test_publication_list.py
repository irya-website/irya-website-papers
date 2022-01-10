import make_irya_publication_list as mipl


def test_fuzzy():
    assert mipl.fuzzy("RADIOASTRONOMIA Y ASTROFISICA") in mipl.fuzzy(
        "Centro de Radioastronom&amp;ía y Astrofí sica"
    )
