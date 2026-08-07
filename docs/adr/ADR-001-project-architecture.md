# ADR-001: Repair Problem Category Design

## Status

Planned

---

## Context

The ERPOS system requires categorization of repair problems.

Examples:

- Hardware Repair
- Software Repair
- Firmware & Flash
- Unlock & Security
- Diagnostic
- Maintenance

During the foundation stage, the project needs a simple and fast structure while keeping the architecture extensible.

---

## Decision

The `repair_problems` table will use a simple `category` string column.

Example:

- Hardware Repair
- Software Repair
- Diagnostic

---

## Reason

- Faster development
- Simple database structure
- Easy seeding
- Easy searching and filtering
- Suitable for the MVP version

---

## Future Plan

In a future version, replace the string column with a dedicated master table.

Example:

repair_problem_categories

Fields:

- id
- name
- slug
- icon
- color
- description
- sort_order
- status

Relationship:

RepairProblem
belongsTo
RepairProblemCategory

---

## Consequences

Current version:

✔ Simpler
✔ Faster
✔ Easier to maintain

Future version:

✔ More flexible
✔ Admin can manage categories
✔ Better analytics
✔ Better dashboard filtering

---

Author: Md. Anisur Rahman

Date: 2026-08-07
